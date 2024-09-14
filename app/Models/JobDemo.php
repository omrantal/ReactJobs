<?php
namespace App\Models;

class JobDemo {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Job One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo
                reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat
                consequatur! Expedita ab consectur tenetur delensiti'
            ],
            [
                'id' => 2,
                'title' => 'Job Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo
                reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat
                consequatur! Expedita ab consectur tenetur delensiti'
            ],
            [
                'id' => 3,
                'title' => 'Job Three',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo
                reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat
                consequatur! Expedita ab consectur tenetur delensiti'
            ],
            [
                'id' => 4,
                'title' => 'Job Four',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo
                reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat
                consequatur! Expedita ab consectur tenetur delensiti'
            ],
            [
                'id' => 5,
                'title' => 'Job Five',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo
                reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat
                consequatur! Expedita ab consectur tenetur delensiti'
            ]
        ];
    }

    public static function find($id) {
        $jobs = self::all();

        foreach($jobs as $job) {
            if ($job['id'] == $id) {
                return $job;
            }
        }
    }
}