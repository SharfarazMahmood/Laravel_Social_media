@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="row new-post">
        <div class="col-md-6 offset-md-3">
            <header>
                <h3>Say something</h3>
            </header>
            <form action="">
                <div class="form-group">
                    <textarea  name="new-post" id="new-postId"  rows="5" class="form-control pb-3"
                        placeholder="Write your thoughts..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary"> Share post</button>
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 offset-md-3">
            <header>
                <h3>What others have shared</h3>
            </header>
            <article class="post">
                <p>sadlgka g.aioreu g.iaohvfdv .oaierhg.askdhf.goiwheryuge fliuagfa sdgluagef rtlweuifh.asdg .rioggnga
                    roigalkerghóiergnrekogh reg.aoihrggreoihg.oriengoire ag sadlgka g.aioreu g.iaohvfdv
                    .oaierhg.askdhf.goiwheryuge fliuagfa sdgluagef rtlweuifh.asdg .rioggnga .roigalkerghóiergnrekogh
                    reg.aoihrggreoihg.oriengoire agsadlgka g.aioreu g.iaohvfdv .oaierhg.askdhf.goiwheryuge fliuagfa
                    sdgluagef rtlweuifh.asdg .rioggnga .roigalkerghóiergnrekogh reg.aoihrggreoihg.oriengoire ag.</p>
                <div class="info">
                    Posted bt Maxim on 12 Feb 2016
                </div>
                <div class="interactions">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> |
                </div>
            </article>
            <article class="post">
                <p>sadlgka g.aioreu g.iaohvfdv .oaierhg.askdhf.goiwheryuge fliuagfa sdgluagef rtlweuifh.asdg .rioggnga
                    roigalkerghóiergnrekogh reg.aoihrggreoihg.oriengoire ag sadlgka g.aioreu g.iaohvfdv
                    .oaierhg.askdhf.goiwheryuge fliuagfa sdgluagef rtlweuifh.asdg .rioggnga .roigalkerghóiergnrekogh
                    reg.aoihrggreoihg.oriengoire agsadlgka g.aioreu g.iaohvfdv .oaierhg.askdhf.goiwheryuge fliuagfa
                    sdgluagef rtlweuifh.asdg .rioggnga .roigalkerghóiergnrekogh reg.aoihrggreoihg.oriengoire ag.</p>
                <div class="info">
                    Posted bt Maxim on 12 Feb 2016
                </div>
                <div class="interactions">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> |
                </div>
            </article>
        </div>
    </section>
@endsection
