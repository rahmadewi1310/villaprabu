<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Daftar Produk');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<h3>Daftar Transaksi Kamar</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="20%" align="center">Nama</th>
                            <th width="20%" align="center">Tgl In</th>
                            <th width="15%" align="center">Tgl Out</th>
                            <th width="15%" align="center">Nomor Kamar</th>
                            <th width="15%" align="center">Status</th>
                        </tr>';
            foreach ($booking as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row['NAMA'].'</td>
                            <td>'.$row['TANGGAL_IN'].'</td>
                            <td>'.$row['TANGGAL_OUT'].'</td>
                            <td>'.$row['ID_KAMAR'].'</td>
                            <td>'.$row['STATUS'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_transaksi_kamar.pdf', 'I');