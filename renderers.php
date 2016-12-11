<?php

class theme_aardvark_postitnote_core_renderer extends core_renderer {

    protected function render_custom_menu(custom_menu $menu) {

        $mycourses = $this->page->navigation->get('mycourses');

        if (isloggedin() && $mycourses && $mycourses->has_children()) {
            $branchlabel = get_string('mycourses', 'theme_aardvark_postitnote');
            $branchurl   = new moodle_url('/my/index.php');
            $branchtitle = $branchlabel;
            $branchsort  = 10000;

            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);

            foreach ($mycourses->children as $coursenode) {
                $branch->add($coursenode->get_content(), $coursenode->action, $coursenode->get_title());
            }

        return parent::render_custom_menu($menu);
    }

        global $CFG;

        require_once($CFG->dirroot.'/course/lib.php');

        $branch = $menu->add(get_string('courses', 'theme_aardvark_postitnote'), null, null, 10000);

        $categorytree = get_course_category_tree();
        foreach ($categorytree as $category) {
            $this->add_category_to_custommenu($branch, $category);
        }

        return parent::render_custom_menu($menu);
    }

    protected function add_category_to_custommenu(custom_menu_item $parent, stdClass $category) {
        $branch = $parent->add($category->name, new moodle_url('/course/category.php', array('id' =>  $category->id)));
        if (!empty($category->categories)) {
            foreach ($category->categories as $subcategory) {
                $this->add_category_to_custommenu($branch, $subcategory);
            }
        }
        if (!empty($category->courses)) {
            foreach ($category->courses as $course) {
                $branch->add($course->shortname, new moodle_url('/course/view.php', array('id' => $course->id)), $course->fullname);
            }
        }
    }

}