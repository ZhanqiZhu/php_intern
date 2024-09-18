<?php

namespace App\Admin\Controllers;

use App\Models\Test;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TestController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Test';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Test());

        $grid->column('id', __('用户id'));
        $grid->column('user', __('用户名'));
        $grid->column('name', __('姓名'));
        $grid->column('pwd', __('密码'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('修改时间'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Test::findOrFail($id));

        $show->field('id', __('用户Id'));
        $show->field('user', __('用户名'));
        $show->field('name', __('姓名'));
        $show->field('pwd', __('密码'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('修改时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Test());

        $form->text('user', __('用户名'));
        $form->text('name', __('姓名'));
        $form->password('pwd', __('密码'));

        return $form;
    }
}
