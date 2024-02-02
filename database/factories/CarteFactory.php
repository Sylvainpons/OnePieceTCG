<?php

namespace Database\Factories;

use App\Models\Carte;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarteFactory extends Factory
{
    protected $model = Carte::class;

    public function definition(): array
    {
        return [
            'numero' => fake()->randomElement([
                'OP01-001', 'OP01-002', 'OP01-003', 'OP01-004', 'OP01-005', 'OP01-006', 'OP01-007', 'OP01-008',
                'OP01-009', 'OP01-010', 'OP01-011', 'OP01-012', 'OP01-013', 'OP01-014', 'OP01-015', 'OP01-016',
                'OP01-017', 'OP01-018', 'OP01-019', 'OP01-020', 'OP01-021', 'OP01-022', 'OP01-023', 'OP01-024',
                'OP01-025', 'OP01-026', 'OP01-027', 'OP01-028', 'OP01-029', 'OP01-030', 'OP01-031', 'OP01-032',
                'OP01-033', 'OP01-034', 'OP01-035', 'OP01-036', 'OP01-037', 'OP01-038', 'OP01-039', 'OP01-040',
                'OP01-041', 'OP01-042', 'OP01-043', 'OP01-044', 'OP01-045', 'OP01-046', 'OP01-047', 'OP01-048',
                'OP01-049', 'OP01-050', 'OP01-051', 'OP01-052', 'OP01-053', 'OP01-054', 'OP01-055', 'OP01-056',
                'OP01-057', 'OP01-058', 'OP01-059', 'OP01-060', 'OP01-061', 'OP01-062', 'OP01-063', 'OP01-064',
                'OP01-065', 'OP01-066', 'OP01-067', 'OP01-068', 'OP01-069', 'OP01-070', 'OP01-071', 'OP01-072',
                'OP01-073', 'OP01-074', 'OP01-075', 'OP01-076', 'OP01-077', 'OP01-078', 'OP01-079', 'OP01-080',
                'OP01-081', 'OP01-082', 'OP01-083', 'OP01-084', 'OP01-085', 'OP01-086', 'OP01-087', 'OP01-088',
                'OP01-089', 'OP01-090', 'OP01-091', 'OP01-092', 'OP01-093', 'OP01-094', 'OP01-095', 'OP01-096',
                'OP01-097', 'OP01-098', 'OP01-099', 'OP01-100', 'OP01-101', 'OP01-102', 'OP01-103', 'OP01-104',
                'OP01-105', 'OP01-106', 'OP01-107', 'OP01-108', 'OP01-109', 'OP01-110', 'OP01-111', 'OP01-112',
                'OP01-113', 'OP01-114', 'OP01-115', 'OP01-116', 'OP01-117', 'OP01-118', 'OP01-119', 'OP01-120',
                'OP01-121'
            ]),
            'nom' => fake()->word(),
            'illustration' => null,
            'description' => null,
            'possede' => false,
        ];
    }
}