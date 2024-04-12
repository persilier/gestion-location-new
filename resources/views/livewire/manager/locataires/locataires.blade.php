<div class="box max-w-5xl mx-auto mt-12">
    <div class="box-header">
        <span class="box-title">add formula</span>
    </div>
    <div class="box-body">
        <div class="grid grid-cols-12 gap-4">
            <div class="xl:col-span-6 col-span-12">
                <select class="ti-form-select !rounded">
                    <option value="test">test</option>
                </select>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="" wire:ignore>
                    <select id="test" class="ti-form-select  !rounded">
                        <option value="test">test</option>
                        <option value="test2">test2</option>
                        <option value="test3">test3</option>
                        <option value="test4">test4</option>
                    </select>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <input type="text" id="date" class="ti-form-input !rounded" />
            </div>
            <div class="xl:col-span-6 col-span-12">
                <input type="text" id="pretime" class="ti-form-input !rounded" />
            </div>
            <div class="xl:col-span-6 col-span-12">
                <form wire:submit.prevent="uploadDocument">
                    <label for="document">Document</label>
                    <input type="file" wire:model="document">
                    <button type="submit" class="ti-btn ti-btn-primary">Upload Document</button>
                </form>
            </div>
        </div>

    </div>
    <div class="box-footer">
        <span>conclusion</span>
    </div>
</div>

@assets
    <script src="/assets/js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/css/select2.min.css">
    <script src="/assets/js/select2.min.js"></script>
    <link rel="modulepreload" href="/assets/js/select2.js" />
    <script type="module" src="/assets/js/select2.js"></script>
    <script src="/assets/libs/flatpickr/flatpickr.min.js"></script>
    <link rel="modulepreload" href="/assets/js/date-time_pickers.js" />
    <script type="module" src="/assets/js/date-time_pickers.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/css/flatpickr.min.css">
@endassets

@script
    <script>
        $(document).ready(function() {
            $('#test').select2({
                placeholder: "Select a state",
                allowClear: true,
                dir: "ltr",
            });
            $('#test').on('change', function(event) {
                console.log(event.target.value);
                $wire.$set('test', event.target.value);
            })
        });
    </script>
@endscript
