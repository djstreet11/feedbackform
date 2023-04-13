<?php

namespace App\Services;

use App\Models\Feedback;
use App\Repositories\FeedbackRepository;

/**
 * Class FeedbackService
 *
 * @package App\Services
 */
class FeedbackService
{
    /** @var FeedbackRepository */
    private $FeedbackRepository;

    public function __construct(FeedbackRepository $FeedbackRepository) {
        $this->FeedbackRepository = $FeedbackRepository;
    }

    /**
     * @param array $data
     *
     * @return Feedback|false
     * @throws \Exception
     */
    public function create(array $data)
    {
        $response = $this->FeedbackRepository->create($data);

        return $response
            ? $response->fresh()
            : false;
    }

    /**
     * @param Feedback $Feedback
     * @param array $data
     * @return Feedback|false
     */
    public function update(Feedback $Feedback, array $data)
    {
        $response = $this->FeedbackRepository->update($Feedback->id, $data);

        return $response
            ? $Feedback->fresh()
            : false;
    }
}
