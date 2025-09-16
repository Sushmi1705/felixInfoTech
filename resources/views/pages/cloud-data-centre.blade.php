@extends('layouts.landing')

@section('title', 'Cloud & Data Centre - Felix Infotech')

@section('content')
<div class="cloud-page container py-5">

    <h1 class="mt-5 mb-4 text-center">Cloud & Data Centre</h1>

    <!-- Section 1 -->
    <section id="tab1" class="mb-5">
        <h2>Client Computing</h2>
        <p>We help integrate end-users into a modern computing environment with solutions that deliver reliable performance and built-in security. Our offering includes rugged and elegant client devices plus management services that increase productivity while reducing total cost of ownership.</p>
    </section>

    <!-- Section 2 -->
    <section id="tab2" class="mb-5">
        <h2>Information Security</h2>
        <p>Protecting data and information is paramount. Our information security services defend against malware, unauthorized access and data loss by providing end-point, web and data security, plus security audits including vulnerability and penetration testing.</p>
        <p><strong>Key services:</strong></p>
        <ul>
          <li>End-point security</li>
          <li>Web & data security</li>
          <li>Security audits, vulnerability & penetration testing</li>
        </ul>
    </section>

    <!-- Section 3 -->
    <section id="tab3" class="mb-5">
        <h2>Consulting & Solutions</h2>
        <p>Our ICT consulting services help organizations optimize resources and processes while reducing operating costs. We provide solution design, implementation and managed services so your teams can focus on core business strategy.</p>
    </section>

    <!-- Section 4 -->
    <section id="tab4" class="mb-5">
        <h2>Managed ICT Services</h2>
        <p>We deliver tailored managed ICT offerings — monitoring, support and operations managed by experienced teams — freeing your organisation from day-to-day ICT operations while ensuring availability, performance and compliance.</p>
        <p><strong>Typical components:</strong> remote monitoring, patching, backup & DR, helpdesk, SLAs and asset management.</p>
    </section>

    <!-- Section 5 -->
    <section id="tab5" class="mb-5">
        <h2>VAPT Services (Vulnerability Assessment & Penetration Testing)</h2>
        <p>VAPT as a Service (VAPTaaS) provides continuous vulnerability assessments and periodic penetration tests under a subscription model. This keeps your security posture up-to-date, reduces remediation time and helps meet compliance requirements.</p>
        <p><strong>VAPTaaS highlights:</strong></p>
        <ul>
          <li>Continuous scanning & scheduled pen-tests</li>
          <li>Network, web app, mobile and cloud assessments</li>
          <li>Executive dashboards and technical reports</li>
          <li>Remediation support and re-testing</li>
        </ul>
    </section>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let hash = window.location.hash;
    if (hash) {
        // scroll to the matching section id #1..#5
        let target = document.querySelector("#tab" + hash.replace("#", ""));
        if (target) target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
});
</script>
@endsection