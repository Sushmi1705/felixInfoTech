@extends('layouts.landing')

@section('title', 'ICT Solutions - Felix Infotech')

@section('content')
<div class="ict-page container py-5">

  <h1 class="mt-5 mb-4 text-center">ICT Solutions</h1>

  <!-- Section 1 -->
  <section id="tab1" class="ict-section">
    <h2>Servers and Storages</h2>
    <p>With a steep increase in technology adoption, our business requires storage solutions such as cloud, flash and hybrid clusters, enterprise storage as they have become a crucial part of the industry. As many businesses are leaping ahead to embrace the modern high-tech environments, they are seeking a platform that can handle the concurrently developing amount of data. That is where Felix Infotech comes into play.
    </p>
    <p><b>Our Technology Partners</b> – HP, Dell, Lenovo, Fujitsu, EMC, NetApp, Huawei, QNAP</p>
  </section>

  <!-- Section 2 -->
  <section id="tab2" class="ict-section">
    <h2>Mobility - Smartphones, Notebooks, iPads</h2>
    <p>In this digital world, use of smartphones, notebooks, tablets, iPads and other devices have become mandatory, making it a necessary resource for every communication and work. We deliver this service to make the business stay connected and provide necessary inputs to flourish.</p>
    <p><b>Our Technology Partners</b> – Apple, HP, Samsung, Lenovo, Dell, Fujitsu, Acer</p>
  </section>

  <!-- Section 3 -->
  <section id="tab3" class="ict-section">
    <h2>Workstation, Desktop, Thin Client</h2>
    <p>Workstation, Desktop, Thin Client are a necessity for every business. But not all organization can afford to buy. So, we help the business by providing them with their requirements and needs.</p>
    <p><b>Our Technology Partners</b>  – HP, Dell, Lenovo, Acer, Boston, Fujitsu, N Computing</p>
  </section>

  <!-- Section 4 -->
  <section id="tab4" class="ict-section">
    <h2>Printers and Scanners</h2>
    <p>Printers and scanners are required to take a hardcopy of documents and scan them. These help them to store their documents either as hardcopy or digital.</p>
    <p><b>Our Technology Partners</b>  – HP, Kodak, Canon, Xerox, Brother, Epson, TVSE, Honeywell</p>
  </section>

  <!-- Section 5 -->
  <section id="tab5" class="ict-section">
    <h2>Power Backup Solutions (UPS)</h2>
    <p>A power backup source will surely help you to continue with the production. So having a power backup solution helps you to keep the production running.
    </p>
    <p><b>Our Technology Partners</b>  – APC, Emerson, Numeric, BPE, Socomec
    </p>
  </section>

  <!-- Section 6 -->
  <section id="tab6" class="ict-section">
    <h2>Local Area Networks (LAN) – Active & Passive</h2>
    <p>A LAN connection keeps you connected within the organization. Having the best connectivity in the organization is achieved by using latest technology and devices.
    </p>
    <p><b>Our Technology Partners</b> - Cisco, Juniper, Brocade, HP, Digilink, D-Link, AMP, TYCO, Molex, Velrack, Netrack, APW, Rittal, BPE</p>
  </section>

  <!-- Section 7 -->
  <section id="tab7" class="ict-section">
    <h2>High-Quality Collaboration Conferencing and Board room Solutions</h2>
    <p>Setting up a meeting for an organization is always a hassle job and finding the right conference and boardroom is a hectic task. We make it easy for you by providing the best conference and boardroom solutions that suits your need.

    Real-time collaboration - audio, video and digital whiteboard solutions
    Classrooms, studios, board-rooms and video wall solutions
    Google, Poly-Cam and Cisco video conferencing solutions
    Digital signage solutions and Proje</p>
    <p><b>Our Technology Partners</b> - Cisco, Poly-Cam, Peoplelink, Samsung, Sony, LG, Epson</p>
  </section>

  <!-- Section 8 -->
  <section id="tab8" class="ict-section">
    <h2>Managed Printing Solutions - Pay Per Page - Zero Capex Solutions</h2>
    <p>All you printing needs like banner, posters, flyers and many more are done by us using high quality machine and products with premium-grade materials.</p>
    <p><b>Our Technology Partners </b> - HP, Felix InfoTech</p>
  </section>

  <!-- Section 9 -->
  <section id="tab9" class="ict-section">
    <h2>Wireless Networks</h2>
    <p>A network connection keeps the workflow in a stable state as everything requires internet. Having the best connectivity in the organization is achieved by using latest technology and devices.</p>
    <p><b>Our Technology Partners</b> - Aruba, Ruckus, D-Link, Airtight, Cisco, Huawei</p>
  </section>

  <!-- Section 10 -->
  <section id="tab10" class="ict-section">
    <h2>CCTV Solutions</h2>
    <p>Safeguard your office and organization premises with our most reliable CCTV solutions.</p>
    <p><b>Our Technology Partners </b> - NUUO, Panasonic, Hikvision, CP Plus</p>
  </section>

  <!-- Section 11 -->
  <section id="tab11" class="ict-section">
    <h2>Rental Solutions</h2>
    <p>We provide rental service on various aspects, we deliver all the necessary requirements that an organization require and needs to function effectively. We offer only the best of the best like branded desktop, laptop, servers, storages, printers and switches. All the services and maintenance are included in our rental package.</p>
  </section>

  <!-- Section 12 -->
  <section id="tab12" class="ict-section">
    <h2>Server Colocation & Relocation</h2>
    <p>
        Server colocation and relocation from one site to another is a complex process. The critical nature of the business requires us to be certain that all the technical and logistical aspects have been fully considered to keep downtime to an absolute minimum. We ensure that your server colocation or relocation gains the safety and security it requires as we provide the most reliable service.</p>
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