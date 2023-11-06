<x-admin-app-layout>
    
    @push('styles')
    <link rel="stylesheet" href="{{ asset('dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    @endpush

    @push('title')
    <title>{{ config('app.name') }} - Kitchen Catgories</title>
    @endpush

    <x-admin.card-header title="Kitchen Catgories" :breadcrumbs="['Home' => 'admin.dashboard', 'Kitchen' => 'current', 'Catgories' => 'current']" />
    
    <section class="datatables">
        <div class="row">
            <div class="col-12">
                <!-- Button trigger add new category modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addNewCategoryModal">
                    Add new Category
                    <i class="ti ti-plus"></i>
                </button>
                
                <!-- Add New Category Modal -->
                <div class="modal fade" id="addNewCategoryModal" tabindex="-1" aria-labelledby="addNewCategoryModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addNewCategoryModalLabel">Create new Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <x-admin.forms.form-group-select label="Belong to section" id="section_id" class="mb-2">
                                    <option value="Pizza">Pizza</option>
                                    <option value="Burger">Burger</option>
                                    <option value="Burger">Pasta</option>
                                    <option value="Burger">Crepe</option>
                                </x-admin.forms.form-group-select>

                                <x-admin.forms.form-group label="Category Name" id="category_name" />
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
                            <h5 class="mb-0">Categories</h5>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Catgory Name</th>
                                        <th>How many items</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pizza</td>
                                        <td>3</td>
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