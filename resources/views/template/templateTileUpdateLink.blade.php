<div class="tile is-parent is-shady">
    <article class="tile is-child notification is-light">
        <div class="media">
            <div class="media-left">
                <p class="title">Change {{$linkToUpdate->title}}</p>
            </div>
            <div class="media-content level-right">
                {!! Form::model($linkToUpdate, ['url' => route('update',['id'=>$link->id]),'file' => 'true','enctype' => 'multipart/form-data']) !!}
                <button class="button is-success">Update</button>
            </div>
        </div>
        <div class="content">
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
                      {{$linkToUpdate->image}}
                    </span>
                  </span>
                  <span class="file-name" id='filename'></span>
                </label>
            </div>
            {!! Form::close() !!}
        </div>
    </article>
  </div>
