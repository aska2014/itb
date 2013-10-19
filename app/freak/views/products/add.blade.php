@extends('freak::elements.empty_add')

@section('form')
<div class="row-fluid">
    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <span class="title">Product</span>
                <div class="toolbar">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#tab-01" data-toggle="tab">English</a></li>
                        <li><a href="#tab-02" data-toggle="tab">Arabic</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content widget-content form-container">
                <div class="tab-pane active" id="tab-01">
                    <form class="form-horizontal form-editor" method="POST">

                        <div class="control-group">
                            <label class="control-label" for="input05">Category</label>
                            <div class="controls">
                                <select name="Product[category_id]" required>
                                    <option value="">Select category</option>
                                    @foreach($categories as $category)
                                    @if($product->category_id == $category->id)
                                    <option selected="selected" value="{{ $category->id }}">{{ $category->en('title') }}</option>
                                    @else
                                    <option value="{{ $category->id }}">{{ $category->en('title') }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input05">Title</label>
                            <div class="controls">
                                <input type="text" name="Product[title]" id="input05" class="span12" value="{{ $product->en('title') }}" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input05">Price</label>
                            <div class="controls">
                                <input type="number" name="Product[price]" id="input05" class="span2" value="{{ $product->price }}" required>
                            </div>
                            <label class="control-label" for="input05">Offer price</label>
                            <div class="controls">
                                <input type="number" name="Product[offer_price]" id="input05" class="span2" value="{{ $product->offer_price }}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Type</label>
                            <div class="controls">
                                <select name="Product[type]">
                                    @foreach($product->getTypes() as $key => $value)
                                    @if($product->type == $key)
                                    <option value="{{ $key }}" selected="selected">{{ $value }}</option>
                                    @else
                                    <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <textarea name="Product[description]" id="editor1" class="cleditor">{{ $product->en('description') }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Specifications</label>
                            <div class="controls">
                                <textarea name="Product[specifications]" id="editor2" class="cleditor">{{ $product->en('specifications') }}</textarea>
                            </div>
                        </div>

                        <input type="hidden" name="Product[language]" value="en" />
                    </form>
                </div>
                <div class="tab-pane" id="tab-02">
                    <form class="form-horizontal form-editor" method="POST">

                        <div class="control-group">
                            <label class="control-label" for="input05">Arabic Title</label>
                            <div class="controls">
                                <input type="text" name="Product[title]" id="input05" class="span12" value="{{ $product->ar('title') }}" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Arabic Description</label>
                            <div class="controls">

                                <textarea name="Product[description]" id="editor3" class="cleditor">{{ $product->ar('description') }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Arabic Specifications</label>
                            <div class="controls">
                                <textarea name="Product[specifications]" id="editor4" class="cleditor">{{ $product->ar('specifications') }}</textarea>
                            </div>
                        </div>

                        <input type="hidden" name="Product[language]" value="ar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
@parent
<script type="text/javascript">
    ;(function( $, window, document, undefined ) {

        $(document).ready(function() {
            $(".cleditor").each(function()
            {
                // When all page resources has finished loading
                CKEDITOR.replace( $(this).attr('id'), {
                    toolbar: [
                        { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
                        [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
                        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike Through', 'Subscript', 'Superscript'] },
                        { items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Link', 'Unlink', 'Anchor'] }
                    ]
                });
            });

            setInterval('refreshCkeditor()', 1000);
        });

    }) (jQuery, window, document);

    function getEditor( editor )
    {
        return CKEDITOR.instances[editor];
    }

    function refreshCkeditor()
    {
        $(".cleditor").each(function() {
            $(this).val(getEditor($(this).attr('id')).getData());
        });
    }
</script>
@stop