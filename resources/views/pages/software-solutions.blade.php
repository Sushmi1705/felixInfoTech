@extends('layouts.landing')

@section('title', 'Software Solutions - Felix Infotech')

@section('content')
<div class="software-page container py-5">

    <h1 class="mt-5 mb-4 text-center">Software Solutions</h1>

    <!-- Section 1 -->
    <section id="tab1" class="software-section mb-5">
        <h2>Software Applications & Solutions</h2>
        <p>We provide solutions and support related to all sorts of software applications.</p>
        <p><b>Our Technology Partners</b> – Microsoft, Adobe, Oracle, VMware, Redhat and Citrix</p>
    </section>

    <!-- Section 2 -->
    <section id="tab2" class="software-section mb-5">
        <h2>Mailing Solutions</h2>
        <p>Our mailing solution provides with leading state-of-the-art technology to meet the diversified sector of business mailing needs.</p>
        <p><b>Our Technology Partners</b> – Google Apps, Office365, Netcore, Post Master</p>
    </section>

    <!-- Section 3 -->
    <section id="tab3" class="software-section mb-5">
        <h2>Antivirus & Security Solutions</h2>
        <p>Keep your data and files protected with our antivirus and security solutions, as data is the key source of an organization.</p>
        <p><b>Our Technology Partners</b> – Sonic Wall, Fortinet, Websense, Sophos, K7, MacAfee, Symantec, Quikheal</p>
    </section>

    <!-- Section 4 -->
    <section id="tab4" class="software-section mb-5">
        <h2>Backup & Archival Solutions</h2>
        <p>We stand as the all-in-one backup and archiving solution for managed service providers (MSPs), ICT resellers and companies. Our leading backup and archive software, disaster recovery, and secure data access caters to consumers, small-medium businesses, and enterprises with utmost reliability. We help to protect your data and applications no matter where they reside to avoid costly business interruptions or to meet compliance requirements. So, securely extend your on-premises backup storage and data archiving solutions using our service to reduce cost and complexity, while achieving efficiency and scalability.

        Endpoint backup, virtual / physical server, and storage backup / restore
        Online backup (on-site, off-site, and cloud), disk, and tape based solutions</p>
        <p><b>Our Technology Partners</b> – Dell, Symantec, Commvault, and Postmaster</p>
    </section>

    <!-- Section 5 -->
    <section id="tab5" class="software-section mb-5">
        <h2>Build Your Private Cloud on OPEX</h2>
        <p>A private cloud is sure to keep your business data secure which saves a lot of space of using servers and devices. Here you can manage all your data in a single place.</p>
        <p><b>Our Technology Partners</b> – NxtGen</p>
    </section>

        <!-- Section 5 -->
    <section id="tab6" class="software-section mb-5">
        <h2>Servers and Storages</h2>
        <p>With a steep increase in technology adoption, our business requires storage solutions such as cloud, flash and hybrid clusters, enterprise storage as they have become a crucial part of the industry. As many businesses are leaping ahead to embrace the modern high-tech environments, they are seeking a platform that can handle the concurrently developing amount of data. That is where Felix Infotech comes into play.</p>
        <p><b>Our Technology Partners</b> – HP, Dell, Lenovo, Fujitsu, EMC, NetApp, Huawei, QNAP</p>
    </section>

    <!-- Section 6 -->
    <section id="tab7" class="software-section mb-5">
        <h2>Other Cloud Solutions</h2>
        <p>A cloud solution is sure to keep your business data secure which saves a lot of space of using servers and devices. Here you can manage all your data in a single place.</p>
        <p><b>Our Technology Partners</b> – AWS, NxtGen, DropBox, Azure, NetMagic</p>
    </section>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let hash = window.location.hash; 
    if (hash) {
        let target = document.querySelector("#tab" + hash.replace("#", ""));
        if (target) target.scrollIntoView({ behavior: "smooth" });
    }
});
</script>
@endsection