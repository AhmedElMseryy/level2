<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class CreateProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:create {productName} {--fixedPrice}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will create a new product';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('productName');
        $fixedPrice = $this->option('fixedPrice');
        $product = Product::updateOrCreate(['name' => $name], [
            'price' => $fixedPrice ? 300 : rand(400, 1000)
        ]);

        if ($product) $this->info('Product Created Successfully');
    }
}
