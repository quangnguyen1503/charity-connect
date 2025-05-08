<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Organization; // Thêm dòng này để import model Organization
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Lấy một organization_id ngẫu nhiên từ bảng organizations
        $organizationId = DB::table('organizations')->inRandomOrder()->first()?->organization_id;

        // Nếu không có organization nào, bạn có thể tạo một organization mới (tùy chọn)
        if (!$organizationId) {
            $organizationId = Organization::factory()->create()->organization_id;
        }

        return [
            'event_id' => $this->faker->uuid(),
            'organization_id' => $organizationId, // Sử dụng organization_id lấy được
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->text(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'location' => $this->faker->address(),
            'min_quantity' => $this->faker->numberBetween(50, 100),
            'max_quantity' => $this->faker->numberBetween(100, 200),
            'quantity_now' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'approved' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'image' => $this->faker->imageUrl(),
        ];
    }
}