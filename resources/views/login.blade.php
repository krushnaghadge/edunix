<x-header />

<!-- Login Section Begin -->
<section class="login-section">
    <div class="login-container">

        <h2 class="login-title">Create New Account</h2>

        {{-- Success Alert --}}
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Alert --}}
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ url('/loginUser') }}" method="POST" enctype="multipart/form-data" class="login-form">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Log In</button>
        </form>

    </div>

    {{-- Page-specific Styles --}}
    <style>
        /* Section Styling */
        .login-section {
            padding: 60px 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container */
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Title */
        .login-title {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        /* Alerts */
        .alert {
            padding: 10px 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 14px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Form */
        .login-form {
            display: flex;
            flex-direction: column;
        }
        .login-form input {
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        .login-form input:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Button */
        .login-form button {
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-form button:hover {
            background-color: #0056b3;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</section>
<!-- Login Section End -->

<x-footer />
