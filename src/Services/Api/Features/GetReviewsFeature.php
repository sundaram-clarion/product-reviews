<?php
namespace App\Services\Api\Features;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;

class GetReviewsFeature extends Feature
{
    public function handle(Request $request)
    {
		return response()->json([
			[
				'productId' => 1,
				'message' => 'This is awesome laptop',
				'likesCount' => 24,
				'user' => 'Sana sharma'
			],
			[
				'productId' => 1,
				'message' => 'I like this product, Waiting for new version.',
				'likesCount' => 10,
				'user' => 'Snehal Kalangutkar'
			],
			[
				'productId' => 3,
				'message' => 'Quick delivery impressed.',
				'likesCount' => 9,
				'user' => 'Sanmesh Naik'
			],
			[
				'productId' => 3,
				'message' => 'Product is ok but not delivered on time ',
				'likesCount' => 0,
				'user' => 'Rita Dubey'
			],
			[
				'productId' => 3,
				'message' => 'Good for rough use',
				'likesCount' => 3,
				'user' => 'Varun Sinha'
			],
			[
				'productId' => 2,
				'message' => 'Have awesome features',
				'likesCount' => 2,
				'user' => "Jeniffer DCosta"
			],
			[
				'productId' => 2,
				'message' => 'Design ok, But good in range.',
				'likesCount' => 0,
				'user' => 'John Fernandes'
			],
			[
				'productId' => 2,
				'message' => 'This is worth for the money, Good features.',
				'likesCount' => 0,
				'user' => 'Nikita Dessai'
			]
		]);
    }
}
