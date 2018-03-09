<?php

namespace Treefiction\Polls;

use Carbon\Carbon;
use Flarum\Database\AbstractModel;

class Vote extends AbstractModel
{
    public $timestamps = true;

    protected $table = 'poll_votes';

    protected $fillable = ['user_id', 'option_id', 'poll_id'];
    protected $visible = ['user_id', 'option_id', 'poll_id'];

    public function poll()
    {
        // Create relationship between Vote and Question model to display poll data
        return $this->belongsTo(Question::class, 'poll_id');
    }
}
