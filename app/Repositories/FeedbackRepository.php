<?php

namespace App\Repositories;

use App\Models\Feedback;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\QueryException;

/**
 * Class FeedbackRepository
 *
 * @package App\Repositories
 *
 */
class FeedbackRepository extends BaseRepository
{
    /**
     * FeedbackRepository constructor.
     *
     * @param Feedback $Feedback
     * @internal param Feedback $Feedback
     */
    public function __construct(Feedback $Feedback)
    {
        $this->model = $Feedback;
    }

    /**
     * @inheritdoc
     */
    public function list(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
        $query->select([
            'feedbacks.id',
            'feedbacks.fullname',
            'feedbacks.phone',
            'feedbacks.city',
            'feedbacks.text',
        ]);
        return $this->processList($query, $params, $relationships);
    }
}
