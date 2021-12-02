                  <div class="form-group"><label for="">Title:</label>
                     <input type="text" name='title' class="form-control @error('title') is-invalid @enderror" value="{{old('title', $story->title)}}">
                  <x-form-error field="title" />
                     </div>
                     
                     <div class="form-group"><label for="">Body:</label>
                    <textarea name="body" class="form-control @error('body') is-invalid @enderror"  id="">
                         {{old('body', $story->body)}}
                    </textarea>
                     <x-form-error field="body" />
                     
                     </div>
                     
                      
                     
                     <div class="form-group"><label for="">Type:</label>
                    <select name="type" id="" class="form-control @error('type') is-invalid @enderror">
                        <option value="">---Select Type---</option>
                        <option value="long" {{'long' == old('type', $story->type) ? 'selected' : ''}}>Long</option>
                        <option value="short" {{'short' == old('type', $story->type ) ? 'selected' : ''}}>Short</option>
                    </select>
                    
                   <x-form-error field="type" />
                     
                     </div>
                     
                     <div class="form-group">
                         <legend>
                             <h6>Status</h6>
                         </legend>
                         <div class="form-check @error('status') is-invalid @enderror">
                         <input type="radio" class="form-check-input" name='status' value="1" {{'1'== old('status', $story->status ) ? 'checked': ''}} >
                         <label for="active" class="form-check-label">Yes</label>
                          
                         </div>
                         
                         
                          <div class="form-check">
                         <input type="radio" class="form-check-input" name='status' value="0" {{'0'== old('status', $story->status) ? 'checked': ''}} >
                         <label for="inactive" class="form-check-label">No</label>
                          
                         </div>
                         
                     <x-form-error field="status" />
                     </div>
                     
                    
                    <div class="form-group"><label for="">Image:</label>
                     <input type="file" name='image' class="form-control @error('image') is-invalid @enderror">
                     
                   <x-form-error field="image" />
                     </div>
                     
                     <img src="{{$story->thumbnail}}" alt='image'>
                     
                    <div class="form-group">
                 @foreach($tags as $tag)  
                  
                  <div class="form-check form-check-inline">
                  <input type="checkbox" class="form-check-input" name="tags[]" {{ in_array($tag->id, old('tags', $story->tags->pluck('id')->toArray())) ? 'checked' : ''}} value="{{$tag->id}}" ></div>
                  <label for="" class="form-check-label">{{$tag->name}}</label>
                  
                 @endforeach
                 </div>