<img id="{{ $id }}" src="{{ $captchaImage }}"
     alt=""
     style="cursor:pointer;width: 100%;height:{{ $height }}px; border: 1px solid #ced4da; border-radius: 0.25rem;"
     title="{{ $title }}"
     onclick="this.setAttribute('src','{{ $route }}&_='+Math.random()+'&captcha-id={{ $id }}');var captcha=document.getElementById('{{ $input_id }}');if(captcha){captcha.focus()}"
>