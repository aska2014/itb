@extends('freak::elements.empty_add')

@section('form')
<div class="row-fluid">
    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <span class="title">Footer</span>
                <div class="toolbar">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#tab-01" data-toggle="tab">English</a></li>
                        <li><a href="#tab-02" data-toggle="tab">Arabic</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content widget-content form-container">
                <div class="tab-pane active" id="tab-01">
                    <form class="form-horizontal" method="POST">

                        <div class="control-group">
                            <label class="control-label" for="input05">Part1</label>
                            <div class="controls">
                                <textarea name="Footer[part1]" class="span12" cols="30" rows="10">{{ $footer->en('part1') }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input05">Part2</label>
                            <div class="controls">
                                <textarea name="Footer[part2]" class="span12" cols="30" rows="10">{{ $footer->en('part2') }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input05">Part3</label>
                            <div class="controls">
                                <textarea name="Footer[part3]" class="span12" cols="30" rows="10">{{ $footer->en('part3') }}</textarea>
                            </div>
                        </div>

                        <input type="hidden" name="Footer[language]" value="en"/>
                    </form>
                </div>
                <div class="tab-pane" id="tab-02">
                    <form class="form-horizontal" method="POST">

                        <div class="control-group">
                            <label class="control-label" for="input05">Part1</label>
                            <div class="controls">
                                <textarea name="Footer[part1]" class="span12" cols="30" rows="10">{{ $footer->ar('part1') }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input05">Part2</label>
                            <div class="controls">
                                <textarea name="Footer[part2]" class="span12" cols="30" rows="10">{{ $footer->ar('part2') }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input05">Part3</label>
                            <div class="controls">
                                <textarea name="Footer[part3]" class="span12" cols="30" rows="10">{{ $footer->ar('part3') }}</textarea>
                            </div>
                        </div>

                        <input type="hidden" name="Footer[language]" value="ar"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop