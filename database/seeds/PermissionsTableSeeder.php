<?php

use App\Permission;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $createInvoice = new Permission();
        $createInvoice->name = 'create-Invoice';
        $createInvoice->display_name = 'Create Invoices';
        // Allow a user to ...
        $createInvoice->description = 'create new invoices ';
        $createInvoice->save();

        $editInvoice = new Permission();
        $editInvoice->name = 'edit-Invoice';
        $editInvoice->display_name = 'Edit Invoices';
        // Allow a user to ...
        $editInvoice->description = 'Edit Existing User Invoices';
        $editInvoice->save();

        $deleteInvoice = new Permission();
        $deleteInvoice->name = 'delete-invoice';
        $deleteInvoice->display_name = 'Delete Invoices';
        // Allow a user to ...
        $deleteInvoice->description = 'Delete existing invoices';
        $deleteInvoice->save();
    }
}
