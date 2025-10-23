
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logo.png">
    <title>Kavirex Admin Portal</title>
    <style>
        :root {
            --primary: #2c3e50;    /* Dark blue */
            --secondary: #e74c3c;  /* Red accent */
            --light: #ecf0f1;      /* Light gray */
        }
        
        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('../assets/images/login-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .login-container {
            width: 380px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        .logo {
            width: 100px;
            margin-bottom: 20px;
        }
        
        h1 {
            color: var(--primary);
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary);
            font-weight: 500;
        }
        
        input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s;
        }
        
        input:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(44, 62, 80, 0.1);
        }
        
        button {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        button:hover {
            background: #1a252f;
        }
        
        .error {
            color: var(--secondary);
            margin: 15px 0;
            padding: 10px;
            background: rgba(231, 76, 60, 0.1);
            border-radius: 4px;
        }
        
        .security-notice {
            font-size: 12px;
            color: #7f8c8d;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="login-container">
       <h1>MRRPS</h1>
        <h2>Admin Portal</h2>
        
        @if($errors->any())

            @foreach( $errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        @endif
        @if(Session::has('error'))
            <li>{{Session::get('error')}}</li>
        @endif
         @if(Session::has('success'))
            <li>{{ Session::get('success')}}</li>
        @endif
        
        <form action="{{route('admin_login_submit')}}" method="post">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required autocomplete="off">
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit">Login</button>
        </form>
        
        <p class="security-notice">
            <i class="fas fa-lock"></i> Restricted access. All activities are logged.
        </p>
    </div>
</body>
</html>