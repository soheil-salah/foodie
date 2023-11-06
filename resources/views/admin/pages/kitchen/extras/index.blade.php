<x-admin-app-layout>
    
    @push('styles')
    <link rel="stylesheet" href="{{ asset('dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    @endpush

    @push('title')
    <title>{{ config('app.name') }} - Kitchen Extras</title>
    @endpush

    <x-admin.card-header title="Kitchen Extras" :breadcrumbs="['Home' => 'admin.dashboard', 'Kitchen' => 'current', 'Extras' => 'current']" />
    
    <section class="datatables">
        <div class="row">
            <div class="col-12">
                <!-- Button trigger add new extra modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addNewExtraModal">
                    Add new Extra
                    <i class="ti ti-plus"></i>
                </button>
                
                <!-- Add New Extra Modal -->
                <div class="modal fade" id="addNewExtraModal" tabindex="-1" aria-labelledby="addNewExtraModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addNewExtraModalLabel">Create new Extra</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <x-admin.forms.form-group label="Item Name" id="item_name" type="text" class="mb-2" />

                                <x-admin.forms.form-group-select label="Belong to Category" id="category_id" class="mb-2">
                                    <option value="Pizza">Pan</option>
                                    <option value="Burger">Stuffed Crust</option>
                                </x-admin.forms.form-group-select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <h5 class="mb-0">Extras</h5>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Extras Name</th>
                                        <th>Belongs to Category</th>
                                        <th>Belongs to Section</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pineapple</td>
                                        <td>Pan</td>
                                        <td>Pizza</td>
                                    </tr>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script src="{{ asset('dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/datatable/datatable-basic.init.js') }}"></script>
    @endpush
</x-admin-app-layout>