    public function test($mailsubject)
    {	
        $exec = exec("/opt/plesk/node/12/bin/node pdf.js " . $mailsubject . " 2>1 &" , $output);

        foreach ($output as $line)
        { 
            echo "$line\n";
        }
		
    }
