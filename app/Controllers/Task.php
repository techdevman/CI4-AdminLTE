<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Task extends BaseController
{
    public function index()
    {
        $model = new TaskModel();
        $data['tasks'] = $model->findAll();
        // error_log(print_r($data['tasks'], true));
        return view('tasks/index', $data);
    }

    public function create()
    {
        return view('tasks/create');
    }

    public function store()
    {
        $model = new TaskModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];
        $model->save($data);
        return redirect()->to('/tasks');
    }

    public function edit($id)
    {
        $model = new TaskModel();
        $data['task'] = $model->find($id);
        // error_log(print_r($data, true));
        return view('tasks/edit', $data);
    }

    public function update($id)
    {
        $model = new TaskModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];
        // error_log(print_r($data, true));
        $model->update($id, $data);
        return redirect()->to('/tasks');
    }

    public function delete($id)
    {
        $model = new TaskModel();
        $model->delete($id);
        return redirect()->to('/tasks');
    }
}
