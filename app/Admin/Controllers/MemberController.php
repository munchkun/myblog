<?php

namespace App\Admin\Controllers;

use App\Member;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MemberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Member';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Member());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('role', __('Role'));
        $grid->column('picture', __('Picture'));
        $grid->column('member_detail', __('Member detail'));

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
        $show = new Show(Member::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('role', __('Role'));
        $show->field('picture', __('Picture'));
        $show->field('member_detail', __('Member detail'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Member());

        $form->text('name', __('Name'));
        $form->text('role', __('Role'));
        $form->image('picture', __('Picture'));
        $form->textarea('member_detail', __('Member detail'));

        return $form;
    }
}
