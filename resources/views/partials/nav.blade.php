<!--<ul>    
    <li><a href="{{route('edit')}}">Edit</a></li>
    <li><a href="{{route('create')}}">Create</a></li>
    <li><a href="{{route('delete')}}">Delete</a></li>
</ul>-->


    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <header>
    <div class="company-logo">#</div>
    <nav class="navbar">
      <ul class="nav-items">
        <li class="nav-item"><a href="/index" class="nav-link">EDIT</a></li>
        <li class="nav-item"><a href="{{route('edit')}}" class="nav-link">EDIT</a></li>
        <li class="nav-item"><a href="{{route('create')}}" class="nav-link">CREATE</a></li>
        <li class="nav-item"><a href="{{route('delete')}}" class="nav-link">DELETE</a></li>        
      </ul>
    </nav>
    <style>
            @import url("https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400");

            *,
            *::before,
            *::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            }

            /* ================= VARIABLE ================ */
            :root {
            --primary-color: hsl(9, 94%, 61%);
            --primary-color-alt: hsl(28, 72%, 83%);
            --second-color: #3e537c;
            --second-color-alt: hsla(220, 33%, 36%, 65%);
            --third-color: hsl(220, 36%, 28%);
            --white-color: #fbfbfb;
            --white-color-alt: hsl(12, 14%, 93%);
            --dark-color: hsl(300, 100%, 0%);
            }

            /* ================= BASE ==================== */
            li {
            list-style: none;
            }
            a {
            text-decoration: none;
            }
            img {
            width: 100%;
            height: auto;
            }
            .bx {
            font-size: 2.5rem;
            }
            .container {
            padding: 0 2rem;
            }

            /* -- BODY -- */
            body {
            font-family: "Raleway", sans-serif;
            font-size: 1rem;
            background-color: var(--white-color);
            }

            /* ================= HEADER ================ */
            header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: var(--dark-color);
            padding: 1rem 2rem;
            }
            .company-logo {
            font-size: 2.5rem;
            background: -webkit-linear-gradient(
                120deg,
                var(--primary-color-alt),
                var(--primary-color)
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            }
            .nav-items {
            display: flex;
            }
            .nav-item {
            margin: 0 2rem;
            }
            .nav-link {
            font-size: 1.1rem;
            letter-spacing: 0.05rem;
            position: relative;
            background: -webkit-linear-gradient(
                var(--primary-color-alt),
                var(--primary-color)
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            }
            .nav-link::before {
            content: "";
            background: linear-gradient(var(--primary-color), var(--primary-color-alt));
            width: 100%;
            height: 0.05rem;
            position: absolute;
            left: 0;
            bottom: 0;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 150ms;
            }
            .nav-link:hover::before {
            transform: scaleX(1);
            transform-origin: bottom left;
            }
            .menu-toggle {
            display: none;
            }
            .bx-menu,
            .bx-x {
            cursor: pointer;
            background: -webkit-linear-gradient(
                120deg,
                var(--primary-color-alt),
                var(--primary-color)
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: none !important;
            }

    </style>