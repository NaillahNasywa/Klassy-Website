@extends('layout.db')

@section('content')
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card">
      <div class="card-body">
        <p class="card-title">NOTIFICATIONS</p>
        <ul class="icon-data-list">
          <li>
            <div class="d-flex">
              <img src="images/faces/face1.jpg" alt="user">
              <div>
                <p class="text-info mb-1">Isabella Becker</p>
                <p class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                  <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                  <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                </svg> this is good</p>
                <small>9:30 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="images/faces/face2.jpg" alt="user">
              <div>
                <p class="text-info mb-1">Adam Warren</p>
                <p class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg> I love koreanfood and i found it yes it's very good place</p>
                <small>10:30 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
            <img src="images/faces/face3.jpg" alt="user">
           <div>
            <p class="text-info mb-1">Leonard Thornton</p>
            <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
              <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
              <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
              <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
            </svg> ☆☆☆☆☆ I like it</p>
            <small>11:30 am</small>
           </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="images/faces/face4.jpg" alt="user">
              <div>
                <p class="text-info mb-1">George Morrison</p>
                <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                  <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                  <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                </svg> Undread Message</p>
                <small>8:50 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="https://i.pinimg.com/564x/d1/6f/d7/d16fd73477905cbe25a136fa8eae8cae.jpg" alt="user">
              <div>
              <p class="text-info mb-1">Ryan Cortez</p>
              <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg> Message 2++</p>
              <small>9:00 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="https://i.pinimg.com/564x/37/a1/9d/37a19d499d87ae38b13fbd806d3cd515.jpg" alt="user">
              <div>
              <p class="text-info mb-1">Ryan Cortez</p>
              <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg> Message 2++</p>
              <small>9:00 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="https://i.pinimg.com/564x/2b/e1/16/2be11659c6c58b91b03a074ffaa67481.jpg" alt="user">
              <div>
              <p class="text-info mb-1">Ryan Cortez</p>
              <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg> Message 2++</p>
              <small>9:00 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="https://i.pinimg.com/564x/78/3e/7a/783e7a00b38df90abe4130d089491edd.jpg" alt="user">
              <div>
              <p class="text-info mb-1">Ryan Cortez</p>
              <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg> Message 2++</p>
              <small>9:00 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="https://i.pinimg.com/564x/0f/e2/41/0fe24124b46bf4ac7142f18dfaa28021.jpg" alt="user">
              <div>
              <p class="text-info mb-1">Ryan Cortez</p>
              <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg> Message 2++</p>
              <small>9:00 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="https://i.pinimg.com/564x/51/b3/29/51b3292ab327a1214e22605f0df2f966.jpg" alt="user">
              <div>
              <p class="text-info mb-1">Ryan Cortez</p>
              <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg> Message 2++</p>
              <small>9:00 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="https://i.pinimg.com/564x/a3/c7/2d/a3c72d1ecc86bc3d9e46ae694a05f5b8.jpg" alt="user">
              <div>
              <p class="text-info mb-1">Ryan Cortez</p>
              <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg> Message 2++</p>
              <small>9:00 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="https://i.pinimg.com/564x/33/b0/0a/33b00a9b8c39e1544cf060a3108c877e.jpg" alt="user">
              <div>
              <p class="text-info mb-1">Ryan Cortez</p>
              <p class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
              </svg> Message 2++</p>
              <small>9:00 am</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
 </div>
  </div>
</div>
</div>
</div>
</div>
@endsection