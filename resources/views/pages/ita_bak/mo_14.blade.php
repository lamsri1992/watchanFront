<div class="accordion" id="accordionExample">
    {{-- copy --}}
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                {{-- หัวข้อใหญ่ --}}
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ไตรมาสที่ 2 หรือไตรมาสที่ 3
                    <br>

                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <ul>
                    {{-- หัวข้อย่อย --}}
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/1.pdf') }}"
                            target="_blank">
                            1. มีบันทึกข้อความลงนามคำสั่ง หรือประกาศ เรื่อง แนวทางการปฏิบัติ ฯ ตามประกาศกระทรวงสาธารณสุขว่าด้วยเกณฑ์จริยธรรมการจัดซื้อจัดหาและการส่งเสริมการขายยาและเวชภัณฑ์ที่มิใช่ยาของกระทรวงสาธารณสุข พ.ศ. 2564 และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                    <ol>

                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/2.pdf') }}"
                            target="_blank">
                            2. มีคำสั่ง หรือประกาศ เรื่อง แนวทางการปฏิบัติ ฯ มีการกำหนดกลไกการกำกับติดตามตามที่หน่วยงานกำหนด
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/3.pdf') }}"
                            target="_blank">
                            3. มีหลักฐานหนังสือแจ้งเวียน
                        </a>
                    </ol>
                    <ol>

                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/4.pdf') }}"
                            target="_blank">
                            4. มีประกาศเจตจำนงสุจริตของผู้บริหาร
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/5.pdf') }}"
                            target="_blank">
                            5. มีภาพถ่ายกิจกรรมที่ระบุวัน เวลา สถานที่จัดกิจกรรมที่ชัดเจน
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/6.pdf') }}"
                            target="_blank">
                            6. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                </ul>
            </div>
        </div>
    </div>
</div>
