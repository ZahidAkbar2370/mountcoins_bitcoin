 <div class="container text-center">
          <div class="row">
            @if (\App\Review::count()>0)
            @php
            
            
            
            $Reviews=\App\Review::where('del','no')->orderBy('id','DESC')->paginate(6);
            
            @endphp
            @foreach ($Reviews as  $review)
            <div class="col-md-4 Services-tab item">
              <div class="folded-corner service_tab_1">
                <div class="text">
                  @php
                  
                  $user=\App\User::where('id',$review->user_id)->first();
                  @endphp
                  @if (isset($user))
                  
                  @if (!empty($user->profile_photo_path ))
                  
                  
                  <img class="text-center " src="{{ asset('img') }}/{{$user->profile_photo_path }}" class="img-thumbnail img-fluid" alt="Cinque Terre" style="width: 80px;height: 80px; border-radius:46px;">
                  
                  @endif
                  
                  <p class="text-success">{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</p>
                  
                  
                  
                  
                  @endif
                  <p class="item-title">
                    <h5 class="text-white">
                        @if (isset($user))
                     {{$user->name }}
                     @else
                     User is Deleted
                     @endif
                 </h5>
                    </p><!-- /.item-title -->
                    <p class="text-white">{{ Str::limit($review->review, 130) }}</p>
                    <div class="rate">
                      @if ($review->rating==1)
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==2)
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==3)
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" class="ratev" title="3"  valueget="3">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==4)
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4"  class="ratev" title="4"  valueget="4">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" class="ratev" title="3"  valueget="3">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==5)
                      <input type="radio" id="star5" name="rate" value="5" />
                      <label for="star5" class="ratev" title="5" valueget="5">5 stars</label>
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4"  class="ratev" title="4"  valueget="4">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" class="ratev" title="3"  valueget="3">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
            <div class="text-center mt-3 mx-auto">
              
              {{ $Reviews->links() }}
            </div>
          </div>