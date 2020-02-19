@extends('layouts.admin.admin')
@section('page-heading','Review')
@section('content')
    <button type="button" class="btn btn-primary" style="margin-bottom: 15px" data-toggle="modal"
            data-target="#exampleModal">
        Add new review
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="{{ route('review.create') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Review</label>
                            <input type="text" class="form-control" name="review" placeholder="Enter review">
                        </div>
                        <div class="form-group">
                            <label>Star</label>
                            <input type="number" class="form-control" name="star" placeholder="Enter star">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @forelse($reviews as $key=>$review)
        <div class="modal fade" id="EditModal{{ $review->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="{{ route('review.edit',$review->id) }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" >Edit review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>review</label>
                                <input type="text" class="form-control" name="review" placeholder="Enter review"
                                       value="{{ $review->review }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @empty
    @endforelse
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">review List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                       style="text-align: center">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>review</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($reviews as $key=>$review)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $review->review }}</td>
                            <td>
                                <a class="btn btn-danger" style="color: white"
                                   href="{{ route('review.destroy',$review->id) }}">Delete</a>

                                <button type="button" style="color: white"
                                        class="btn btn-primary" data-toggle="modal"
                                        data-target="#EditModal{{ $review->id }}">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


