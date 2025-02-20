@include('partials.header')

<div class="container" style="display:block;">
    <br><br>
    <h2 style="text-align:center; font-size: 50px;">Informasi Akademik</h2>
    <p style="text-align: center; margin-bottom: 30px; font-size: 30px;">SDN 012 Babakan Ciparay</p> 

    <!-- Tabs Navigation -->
    <div class="tabs" style="text-align: center; margin-top: 20px; width: 100%; justify-content: center;">
        <ul style="display: inline-flex; list-style: none; padding: 0; background: #f8f8f8; border-radius: 25px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
            <li onclick="showTab('kurikulum')" style="padding: 10px 20px; margin: 0 5px; cursor: pointer; border-radius: 25px; background-color: #ffffff; font-size: 18px; font-weight: bold; box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.05);">
                Kurikulum
            </li>
            <li onclick="showTab('program-pembelajaran')" style="padding: 10px 20px; margin: 0 5px; cursor: pointer; border-radius: 25px; background-color: #ffffff; font-size: 18px; font-weight: bold; box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.05);">
                Program Pembelajaran
            </li>
            <li onclick="showTab('kalender-akademik')" style="padding: 10px 20px; margin: 0 5px; cursor: pointer; border-radius: 25px; background-color: #ffffff; font-size: 18px; font-weight: bold; box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.05);">
                Kalender Akademik
            </li>
        </ul>
    </div>

    <!-- Tab Contents -->
    <div id="kurikulum" class="tab-content" style="display: block; margin-top: 20px;">
        @include('partials.academic.kurikulum')
    </div>

    <div id="program-pembelajaran" class="tab-content" style="display: none; margin-top: 20px;">
        @include('partials.academic.program')
    </div>

    <div id="kalender-akademik" class="tab-content" style="display: none; margin-top: 20px;">
        <div style="text-align: center;">
            <img src="https://sdn012babakanciparay.sch.id/assets/buat foto fitur abdimas/informasi akademik/kalender_akademik.png" 
                alt="Kalender Akademik Semester Ganjil 2023/2024" 
                style="max-width: 80%; height: auto; border: 1px solid #ccc; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin: auto;">
        </div>
        <br><br><br>
    </div>
</div>

<script>
function showTab(tabId) {
    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.style.display = 'none';
    });
    
    // Show the selected tab content
    document.getElementById(tabId).style.display = 'block';
    
    // Update active tab styling
    document.querySelectorAll('.tabs li').forEach(tab => {
        tab.style.backgroundColor = '#ffffff';
    });
    event.target.style.backgroundColor = '#f0f0f0';
}
</script>

@include('partials.footer')
