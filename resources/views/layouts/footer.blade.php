<!-- Footer -->
<footer style="background: #1e293b; color: white; padding: 40px 0; margin-top: 50px;">
    <div class="container py-4">
        <div class="row">
            <!-- Brand Column -->
            <div class="col-lg-6 col-md-8 mb-4">
                <h5 style="font-weight: bold; margin-bottom: 1rem; color: white;">
                    <i class="fas fa-graduation-cap me-2" style="color: #2563eb;"></i>MRRPS
                </h5>
                <p style="color: #94a3b8; margin-bottom: 1rem;">
                    Marks Registration and Result Publication System. Streamlining academic management for institutions.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" style="color: #94a3b8; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" style="color: #94a3b8; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" style="color: #94a3b8; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" style="color: #94a3b8; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-6 col-md-4 mb-4">
                <h6 style="font-weight: 600; margin-bottom: 1rem; color: white;">Quick Links</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ url('/') }}" style="color: #94a3b8; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">Home</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('login') }}" style="color: #94a3b8; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">Login</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('register') }}" style="color: #94a3b8; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">Register</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" style="color: #94a3b8; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">Announcements</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr style="border-color: #475569; margin: 2rem 0;">

        <!-- Bottom Section -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <p style="color: #94a3b8; margin-bottom: 0;">
                    &copy; {{ date('Y') }} MRRPS. All rights reserved.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="d-flex justify-content-md-end gap-4">
                    <a href="#" style="color: #94a3b8; text-decoration: none; font-size: 0.875rem; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">Privacy Policy</a>
                    <a href="#" style="color: #94a3b8; text-decoration: none; font-size: 0.875rem; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">Terms of Service</a>
                    <a href="#" style="color: #94a3b8; text-decoration: none; font-size: 0.875rem; transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#94a3b8'">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</footer>