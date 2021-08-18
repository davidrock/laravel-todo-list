<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Repository\CandidateRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CandidateController extends Controller
{
    private $candidateRepository;

    public function __constructor(CandidateRepositoryInterface $candidateRepository){
        $this->candidateRepository = $candidateRepository;
    }

    public function index() : JsonResponse {
        return response()->json($this->candidateRepository->all(), 200);
    }

    public function create() : JsonResponse {
        $candidate = Candidate::create([
            'name' => 'David',
            'email' => 'david@email.com'
        ]);
        return response()->json($candidate, 200);
    }
}
