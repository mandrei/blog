<?php
/**
 * User: andrei
 * Date: 1/25/14
 * Time: 12:25 AM
 */

App::bind('AdminModel', 'CoreApp\Admin\Models\Admin');

App::bind('AdminDatatablesModel', 'CoreApp\Admin\Models\Datatables');

App::bind('AdminDatatablesRepository', 'CoreApp\Admin\Repositories\Datatables');

App::bind('AdminDatabase','CoreApp\Admin\Databases\Admin');