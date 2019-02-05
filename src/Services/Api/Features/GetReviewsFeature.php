<?php
namespace App\Services\Api\Features;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\Http\Jobs\RespondWithJsonJob;

class GetReviewsFeature extends Feature
{
    public function handle(Request $request)
    {
		$reviews = $this->run(GetReviewsJob::class);

		return $this->run(new RespondWithJsonJob($reviews));
    }
}
