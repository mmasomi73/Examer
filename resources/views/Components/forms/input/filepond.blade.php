<div
{{--{{$attributes}}--}}
     wire:ignore
     x-data
     x-init="
        FilePond.registerPlugin(
          FilePondPluginImageEdit,
          FilePondPluginImagePreview,
          FilePondPluginImageCrop,
          FilePondPluginImageResize,
{{--          FilePondPluginImageExifOrientation,--}}
{{--          FilePondPluginFileValidateSize,--}}
{{--          FilePondPluginImageEdit--}}
        );
        FilePond.setOptions({
            allowMultiple:{{isset($attributes['multiple'])? 'true':'false'}},
            server: {
                 process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                     @this.upload('{{$attributes['wire:model.defer']}}', file, load, error, progress)
                 },
                 revert: (filename, load) => {
                     @this.removeUpload('{{$attributes['wire:model.defer']}}',filename, load)
                 }
            },
        });
          FilePond.create( $refs.{{$attributes['wire:model.defer']}},{
            imageCropAspectRatio: '16:6',
            imageResizeTargetWidth: 1280,
            imageResizeTargetHeight: 480,
          } );"
     class="mt-1">
    <input class="p-3" type="file" x-ref="{{$attributes['wire:model.defer']}}">

</div>
