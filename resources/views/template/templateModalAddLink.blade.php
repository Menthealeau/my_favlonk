
<div class="modal-background"></div>
<div class="modal-card">
    <header class="modal-card-head">
        <p class="modal-card-title">Ajouter un lien</p>
        <button class="delete" id='close' aria-label="close"></button>
    </header>
    <section class="modal-card-body">
        {!! Form::open(['url' => route('link.store'),'file' => 'true','enctype' => 'multipart/form-data']) !!}
        {!! Form::label('link', 'Link', ['class' => 'label']) !!}
        {!! Form::input('text', 'link', null, ['class' => 'input','placeholder' =>'Ex : https://www.google.com/']) !!}
        {!! Form::label('title', 'Titre', ['class' => 'label mt-2']) !!}
        {!! Form::input('text', 'title', null, ['class' => 'input']) !!}
        {!! Form::label('description', 'Resume', ['class' => 'label mt-2']) !!}
        {!! Form::Textarea('description', null, ['class' => 'textarea is-small']) !!}
        {!! Form::label('image', 'Image', ['class' => 'label mt-2']) !!}
        <div class="file has-name">
            <label class="file-label">
              <input class="file-input" id='image' type="file" name="image">
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Choose a file…
                </span>
              </span>
              <span class="file-name" id='filename'></span>
            </label>
        </div>



    </section>
    <footer class="modal-card-foot">
        <button class="button is-success">Ajouter</button>
        <button class="button">Cancel</button>
    </footer>
    {!! Form::close() !!}
</div>
</div>
