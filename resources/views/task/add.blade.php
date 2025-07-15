@extends('layouts.app')
@section('body')
<div class="page-container">

    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Add task</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Manager</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>

                <li class="breadcrumb-item active">Add task</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="card-title">Add task</h4>
                    <p class="text-muted mb-0">Add task</p>
                </div>
                <div class="card-body">
                    <form action="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter task name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select my-1 my-md-0 me-sm-3" data-toggle="select2" id="status">
                                        <option>Draft</option>
                                        <option>Scheduled</option>
                                        <option>Published</option>
                                        <option>Entertainment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="7" placeholder="Short description about the task"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="end_date" required="">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Task</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
