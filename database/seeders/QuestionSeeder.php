<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create( [
            'id'=>1,
            'subject_id'=>1,
            'question'=>'What is the name of the system which deals with the running of the actual computer and not with the programming problems?',
            'option_a'=>'source program',
            'option_b'=>'object program',
            'option_c'=>'systems program',
            'option_d'=>'operating system',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 22:57:55',
            'updated_at'=>'2023-03-19 22:57:55'
            ] );
            
            
                        
            Question::create( [
            'id'=>2,
            'subject_id'=>1,
            'question'=>'Memory management is',
            'option_a'=>'critical for even the simplest operating systems',
            'option_b'=>'not used on multiprogramming systems',
            'option_c'=>'replaced with virtual memory on current systems',
            'option_d'=>'not used in modern operating system',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 22:59:12',
            'updated_at'=>'2023-03-19 22:59:12'
            ] );
            
            
                        
            Question::create( [
            'id'=>3,
            'subject_id'=>1,
            'question'=>'The process of transferring data intended for a peripheral device into a disk (or intermediate store) so that it can be transferred to peripheral, at a more convenient time or in bulk, is known as',
            'option_a'=>'virtual programming',
            'option_b'=>'caching',
            'option_c'=>'spooling',
            'option_d'=>'multiprogramming',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:00:03',
            'updated_at'=>'2023-03-19 23:00:03'
            ] );
            
            
                        
            Question::create( [
            'id'=>4,
            'subject_id'=>1,
            'question'=>'Process is',
            'option_a'=>'a job in secondary memory',
            'option_b'=>'a program in execution',
            'option_c'=>'contents of main memory',
            'option_d'=>'program in High level language kept on disk',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:00:54',
            'updated_at'=>'2023-03-19 23:00:54'
            ] );
            
            
                        
            Question::create( [
            'id'=>5,
            'subject_id'=>1,
            'question'=>'Round robin scheduling is essentially the preemptive version of',
            'option_a'=>'FILO',
            'option_b'=>'FCFS',
            'option_c'=>'FIFO',
            'option_d'=>'Longest time first',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:01:44',
            'updated_at'=>'2023-03-19 23:01:44'
            ] );
            
            
                        
            Question::create( [
            'id'=>6,
            'subject_id'=>1,
            'question'=>'The operating system of a computer serves as a software interface between the user and',
            'option_a'=>'screen',
            'option_b'=>'memory',
            'option_c'=>'peripheral',
            'option_d'=>'hardware',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:02:57',
            'updated_at'=>'2023-03-19 23:02:57'
            ] );
            
            
                        
            Question::create( [
            'id'=>7,
            'subject_id'=>1,
            'question'=>'The term operating system means',
            'option_a'=>'the way a floppy disk drive operates',
            'option_b'=>'conversion of high level language into machine code',
            'option_c'=>'the way a computer operator works',
            'option_d'=>'a set of programs which controls computer working',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:04:09',
            'updated_at'=>'2023-03-19 23:04:09'
            ] );
            
            
                        
            Question::create( [
            'id'=>8,
            'subject_id'=>1,
            'question'=>'What is the name given to the organised collection of software that controls the overall operation of a computer?',
            'option_a'=>'operating system',
            'option_b'=>'controlling system',
            'option_c'=>'peripheral system',
            'option_d'=>'working system',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:04:59',
            'updated_at'=>'2023-03-19 23:04:59'
            ] );
            
            
                        
            Question::create( [
            'id'=>9,
            'subject_id'=>1,
            'question'=>'Remote computing services involve the use of timesharing and',
            'option_a'=>'realtime processing',
            'option_b'=>'batch processing',
            'option_c'=>'interactive processing',
            'option_d'=>'multiprocessing',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:06:05',
            'updated_at'=>'2023-03-19 23:06:05'
            ] );
            
            
                        
            Question::create( [
            'id'=>10,
            'subject_id'=>1,
            'question'=>'Daisy chain is a device for',
            'option_a'=>'interconnecting a number of devices to a number of controllers',
            'option_b'=>'connecting a number of devices to a controller',
            'option_c'=>'connecting a number of controllers to a device',
            'option_d'=>'all of these',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:07:43',
            'updated_at'=>'2023-03-19 23:07:43'
            ] );
            
            
                        
            Question::create( [
            'id'=>11,
            'subject_id'=>1,
            'question'=>'Data encryption',
            'option_a'=>'is not necessary, since data cannot be interrupted',
            'option_b'=>'is mostly used by public networks',
            'option_c'=>'cannot be used by private installations',
            'option_d'=>'is mostly used by financial networks',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:09:16',
            'updated_at'=>'2023-03-19 23:09:16'
            ] );
            
            
                        
            Question::create( [
            'id'=>12,
            'subject_id'=>1,
            'question'=>'Which of the following capabilities is required for a system program to execute more than one program at a time?',
            'option_a'=>'multitasking',
            'option_b'=>'virtual memory',
            'option_c'=>'compiling',
            'option_d'=>'word processing',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:10:52',
            'updated_at'=>'2023-03-19 23:10:52'
            ] );
            
            
                        
            Question::create( [
            'id'=>13,
            'subject_id'=>1,
            'question'=>'Paging',
            'option_a'=>'is a method of memory allocation by which the program is subdivided into equal portions, or pages and core is subdivided into equal portions or blocks',
            'option_b'=>'allows multiple programs to reside in separate areas of core at the time',
            'option_c'=>'is a method of allocating processor time',
            'option_d'=>'consists of those addresses that may be generated by a processor during execution of a computation',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:11:45',
            'updated_at'=>'2023-03-19 23:11:45'
            ] );
            
            
                        
            Question::create( [
            'id'=>14,
            'subject_id'=>1,
            'question'=>'Multiprogramming',
            'option_a'=>'is a method of allocating processor time',
            'option_b'=>'consists of those addresses that may be generated by a processor during execution of a computation',
            'option_c'=>'allows multiple programs to reside in separate areas of core at the time',
            'option_d'=>'is a method of memory allocation by which the programs is subdivided into equal portions, or pages and core is subdivided into equal portions or blocks',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:13:09',
            'updated_at'=>'2023-03-19 23:13:09'
            ] );
            
            
                        
            Question::create( [
            'id'=>15,
            'subject_id'=>1,
            'question'=>'What is the name given to the process of initialising a microcomputer with its operating system?',
            'option_a'=>'boot recording',
            'option_b'=>'warm booting',
            'option_c'=>'booting',
            'option_d'=>'cold booting',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:15:00',
            'updated_at'=>'2023-03-19 23:15:00'
            ] );
            
            
                        
            Question::create( [
            'id'=>16,
            'subject_id'=>2,
            'question'=>'Which of the following is the worlds first cellular system to specify digital modulation and network level architecture?',
            'option_a'=>'GSM',
            'option_b'=>'AMPS',
            'option_c'=>'CDMA',
            'option_d'=>'IS-54',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:17:49',
            'updated_at'=>'2023-03-19 23:17:49'
            ] );
            
            
                        
            Question::create( [
            'id'=>17,
            'subject_id'=>2,
            'question'=>'Previously in 1980s, GSM stands for ____________',
            'option_a'=>'Global system for mobile',
            'option_b'=>'Groupe special mobile',
            'option_c'=>'Global special mobile',
            'option_d'=>'Groupe system mobile',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:22:33',
            'updated_at'=>'2023-03-19 23:22:33'
            ] );
            
            
                        
            Question::create( [
            'id'=>18,
            'subject_id'=>2,
            'question'=>'Who sets the standards of GSM?',
            'option_a'=>'ITU',
            'option_b'=>'AT & T',
            'option_c'=>'ETSI',
            'option_d'=>'USDC',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:23:24',
            'updated_at'=>'2023-03-19 23:23:24'
            ] );
            
            
                        
            Question::create( [
            'id'=>19,
            'subject_id'=>2,
            'question'=>'Which of the following does not come under the teleservices of GSM?',
            'option_a'=>'Standard mobile telephony',
            'option_b'=>'Mobile originated traffic',
            'option_c'=>'Base originated traffic',
            'option_d'=>'Packet switched traffic',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:24:24',
            'updated_at'=>'2023-03-19 23:24:24'
            ] );
            
            
                        
            Question::create( [
            'id'=>20,
            'subject_id'=>2,
            'question'=>'Which of the following comes under supplementary ISDN services?',
            'option_a'=>'Emergency calling',
            'option_b'=>'Packet switched protocols',
            'option_c'=>'Call diversion',
            'option_d'=>'Standard mobile telephony',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:26:25',
            'updated_at'=>'2023-03-19 23:26:25'
            ] );
            
            
                        
            Question::create( [
            'id'=>21,
            'subject_id'=>2,
            'question'=>'Which of the following memory device stores information such as subscribers identification number in GSM?',
            'option_a'=>'Register',
            'option_b'=>'Flip flop',
            'option_c'=>'SIM',
            'option_d'=>'SMS',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:27:08',
            'updated_at'=>'2023-03-19 23:27:08'
            ] );
            
            
                        
            Question::create( [
            'id'=>22,
            'subject_id'=>2,
            'question'=>'Which of the following feature makes impossible to eavesdrop on GSM radio transmission?',
            'option_a'=>'SIM',
            'option_b'=>'On the air privacy',
            'option_c'=>'SMS',
            'option_d'=>'Packet switched traffic',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:30:30',
            'updated_at'=>'2023-03-19 23:30:30'
            ] );
            
            
                        
            Question::create( [
            'id'=>23,
            'subject_id'=>2,
            'question'=>'Which of the following does not come under subsystem of GSM architecture?',
            'option_a'=>'BSS (Base Station Subsystem)',
            'option_b'=>'NSS  (Network and Switching Subsystem)',
            'option_c'=>'OSS (Operation Support Subsystem)',
            'option_d'=>'Channel',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:33:58',
            'updated_at'=>'2023-03-19 23:33:58'
            ] );
            
            
                        
            Question::create( [
            'id'=>24,
            'subject_id'=>2,
            'question'=>'Which of the following multiple access techniques are used by second generation cellular systems?',
            'option_a'=>'FDMA/FDD and TDMA/FDD',
            'option_b'=>'TDMA/FDD and CDMA/FDD',
            'option_c'=>'FDMA/FDD and CDMA/FDD',
            'option_d'=>'FDMA/FDD only',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:35:24',
            'updated_at'=>'2023-03-19 23:35:24'
            ] );
            
            
                        
            Question::create( [
            'id'=>25,
            'subject_id'=>2,
            'question'=>'Which of the following is not a characteristic of 3G network?',
            'option_a'=>'Communication over VoIP (Voice over internet Protocol )',
            'option_b'=>'Unparalleled network capacity',
            'option_c'=>'Multi-megabit Internet access',
            'option_d'=>'LTE (Long term Evolution)   based network',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:38:34',
            'updated_at'=>'2023-03-19 23:38:34'
            ] );
            
            
                        
            Question::create( [
            'id'=>26,
            'subject_id'=>2,
            'question'=>'Wi-Fi stands for-',
            'option_a'=>'Wireless Fidelity',
            'option_b'=>'Wireless LAN',
            'option_c'=>'Wireless FLAN',
            'option_d'=>'None of the mentioned',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:40:28',
            'updated_at'=>'2023-03-19 23:40:28'
            ] );
            
            
                        
            Question::create( [
            'id'=>27,
            'subject_id'=>2,
            'question'=>'What is the term used by ITU for a set of global standards of 3G systems?',
            'option_a'=>'IMT 2000',
            'option_b'=>'GSM',
            'option_c'=>'CDMA',
            'option_d'=>'EDGE',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:41:56',
            'updated_at'=>'2023-03-19 23:41:56'
            ] );
            
            
                        
            Question::create( [
            'id'=>28,
            'subject_id'=>2,
            'question'=>'___________ manages the switching function in GSM.',
            'option_a'=>'BSS',
            'option_b'=>'NSS',
            'option_c'=>'OSS',
            'option_d'=>'MSC',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:42:49',
            'updated_at'=>'2023-03-19 23:42:49'
            ] );
            
            
                        
            Question::create( [
            'id'=>29,
            'subject_id'=>2,
            'question'=>'Which one is not a TDMA standard of second generation networks?',
            'option_a'=>'GSM (Global System Mobile)',
            'option_b'=>'IS-136  (Interim Standard 136)',
            'option_c'=>'AMPS',
            'option_d'=>'PDC (Pacific Digital Cellular)',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:45:52',
            'updated_at'=>'2023-03-19 23:45:52'
            ] );
            
            
                        
            Question::create( [
            'id'=>30,
            'subject_id'=>2,
            'question'=>'Which type of cell provides the best level of service for average subscribers?',
            'option_a'=>'Acceptance cell',
            'option_b'=>'Barred cell',
            'option_c'=>'Reserved cell',
            'option_d'=>'Suitable cell',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:46:46',
            'updated_at'=>'2023-03-19 23:46:46'
            ] );
            
            
                        
            Question::create( [
            'id'=>31,
            'subject_id'=>3,
            'question'=>'What are Requirements refined and analyzed to assess their clarity, completeness, and_____',
            'option_a'=>'Consistency',
            'option_b'=>'Correctness',
            'option_c'=>'Concurrency',
            'option_d'=>'None of these',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:49:44',
            'updated_at'=>'2023-03-19 23:49:44'
            ] );
            
            
                        
            Question::create( [
            'id'=>32,
            'subject_id'=>3,
            'question'=>'A software project that meets all the given objectives is a success of _________.',
            'option_a'=>'Project fundamental purpose',
            'option_b'=>'Project quality',
            'option_c'=>'Project requirement',
            'option_d'=>'Project management myth',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:50:54',
            'updated_at'=>'2023-03-19 23:50:54'
            ] );
            
            
                        
            Question::create( [
            'id'=>33,
            'subject_id'=>3,
            'question'=>'___________ is not an effective software project management focus.',
            'option_a'=>'people',
            'option_b'=>'product',
            'option_c'=>'process',
            'option_d'=>'popularity',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:51:39',
            'updated_at'=>'2023-03-19 23:51:39'
            ] );
            
            
                        
            Question::create( [
            'id'=>34,
            'subject_id'=>3,
            'question'=>'What is the abbreviation of PM-CMM…',
            'option_a'=>'product management capability maturity model',
            'option_b'=>'process management capability maturity model',
            'option_c'=>'people management capability maturity model',
            'option_d'=>'project management capability maturity model',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:52:26',
            'updated_at'=>'2023-03-19 23:52:26'
            ] );
            
            
                        
            Question::create( [
            'id'=>35,
            'subject_id'=>3,
            'question'=>'_________ is not a project managers activity.',
            'option_a'=>'project design',
            'option_b'=>'project management',
            'option_c'=>'project planning',
            'option_d'=>'project control',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:53:19',
            'updated_at'=>'2023-03-19 23:53:19'
            ] );
            
            
                        
            Question::create( [
            'id'=>36,
            'subject_id'=>3,
            'question'=>'The __________ is not an approach to software cost estimation?',
            'option_a'=>'Analytical',
            'option_b'=>'Critical',
            'option_c'=>'Empirical',
            'option_d'=>'Heuristic',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:54:38',
            'updated_at'=>'2023-03-19 23:54:38'
            ] );
            
            
                        
            Question::create( [
            'id'=>37,
            'subject_id'=>3,
            'question'=>'Which one of the following is not considered as a risk in project management?',
            'option_a'=>'Staff turnover',
            'option_b'=>'Testing',
            'option_c'=>'Product competition',
            'option_d'=>'Specification delays',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:55:26',
            'updated_at'=>'2023-03-19 23:55:26'
            ] );
            
            
                        
            Question::create( [
            'id'=>38,
            'subject_id'=>3,
            'question'=>'What is the process each manager follows during the life of a project is known as',
            'option_a'=>'Project Management',
            'option_b'=>'Project Management Life Cycle',
            'option_c'=>'Manager life cycle',
            'option_d'=>'All of the mentioned',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-19 23:57:08',
            'updated_at'=>'2023-03-19 23:57:08'
            ] );
            
            
                        
            Question::create( [
            'id'=>39,
            'subject_id'=>3,
            'question'=>'Quality planning is the process of developing a quality plan for_________.',
            'option_a'=>'customers',
            'option_b'=>'project manager',
            'option_c'=>'team',
            'option_d'=>'project',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-19 23:57:53',
            'updated_at'=>'2023-03-19 23:57:53'
            ] );
            
            
                        
            Question::create( [
            'id'=>40,
            'subject_id'=>3,
            'question'=>'Which of the following is the sub-process of process improvement?',
            'option_a'=>'Process introduction',
            'option_b'=>'De-processification',
            'option_c'=>'Process analysis',
            'option_d'=>'Process distribution',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-19 23:58:39',
            'updated_at'=>'2023-03-19 23:58:39'
            ] );
            
            
                        
            Question::create( [
            'id'=>41,
            'subject_id'=>3,
            'question'=>'Which one the following is an internal software quality from given below?',
            'option_a'=>'reusability',
            'option_b'=>'reliability',
            'option_c'=>'scalability',
            'option_d'=>'usability',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-19 23:59:24',
            'updated_at'=>'2023-03-19 23:59:24'
            ] );
            
            
                        
            Question::create( [
            'id'=>42,
            'subject_id'=>3,
            'question'=>'What is the symbolic representation of RUP __________________',
            'option_a'=>'Rational Unified Process',
            'option_b'=>'Rational Unified Proces',
            'option_c'=>'Rational Unified Program',
            'option_d'=>'National Unified Process',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 00:01:40',
            'updated_at'=>'2023-03-20 00:01:40'
            ] );
            
            
                        
            Question::create( [
            'id'=>43,
            'subject_id'=>3,
            'question'=>'What limits the options of the project team?',
            'option_a'=>'Constraints',
            'option_b'=>'Assumptions',
            'option_c'=>'Technology',
            'option_d'=>'Deliverables',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 00:02:58',
            'updated_at'=>'2023-03-20 00:02:58'
            ] );
            
            
                        
            Question::create( [
            'id'=>44,
            'subject_id'=>3,
            'question'=>'The work breakdown that covers the acquisition of a specific defense material item and is related to contractual effort, is called______',
            'option_a'=>'Contract WBS',
            'option_b'=>'Contract Program WBS',
            'option_c'=>'Program WBS',
            'option_d'=>'None of these',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-20 00:03:40',
            'updated_at'=>'2023-03-20 00:03:40'
            ] );
            
            
                        
            Question::create( [
            'id'=>45,
            'subject_id'=>3,
            'question'=>'Work Breakdown Structure how many types…',
            'option_a'=>'Three',
            'option_b'=>'Two',
            'option_c'=>'Four',
            'option_d'=>'None of these',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 00:04:23',
            'updated_at'=>'2023-03-20 00:04:23'
            ] );
            
            
                        
            Question::create( [
            'id'=>46,
            'subject_id'=>3,
            'question'=>'Requirements Management is Important? because of the changes…',
            'option_a'=>'in technology',
            'option_b'=>'to the environment',
            'option_c'=>'in customers expectations',
            'option_d'=>'in all of the mentioned.',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 00:07:02',
            'updated_at'=>'2023-03-20 00:07:02'
            ] );
            
            
                        
            Question::create( [
            'id'=>47,
            'subject_id'=>3,
            'question'=>'The following costs are not part of the total effort cost______',
            'option_a'=>'Costs of lunch time food',
            'option_b'=>'Costs of providing heating',
            'option_c'=>'Costs of networking',
            'option_d'=>'Costs of support',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 00:07:56',
            'updated_at'=>'2023-03-20 00:07:56'
            ] );
            
            
                        
            Question::create( [
            'id'=>48,
            'subject_id'=>3,
            'question'=>'Which of the following is related to the overall functionality of the delivered software?',
            'option_a'=>'Product-related metrics',
            'option_b'=>'Function-related metrics',
            'option_c'=>'Size-related metrics',
            'option_d'=>'None of the mentioned',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 00:08:39',
            'updated_at'=>'2023-03-20 00:08:39'
            ] );
            
            
                        
            Question::create( [
            'id'=>49,
            'subject_id'=>3,
            'question'=>'Whenever evaluating current problems and desired information the analyst begins to..',
            'option_a'=>'Model',
            'option_b'=>'Synthesize solutions',
            'option_c'=>'Specification',
            'option_d'=>'None of these',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 00:09:17',
            'updated_at'=>'2023-03-20 00:09:17'
            ] );
            
            
                        
            Question::create( [
            'id'=>50,
            'subject_id'=>3,
            'question'=>'What type of reviews conducted at each of this phases_____',
            'option_a'=>'Analysis',
            'option_b'=>'Design',
            'option_c'=>'Coding',
            'option_d'=>'All of given',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-20 00:10:15',
            'updated_at'=>'2023-03-20 00:10:15'
            ] );
            
            
                        
            Question::create( [
            'id'=>51,
            'subject_id'=>4,
            'question'=>'Which method returns the average value of a given key ?',
            'option_a'=>'average()',
            'option_b'=>'avg()',
            'option_c'=>'median()',
            'option_d'=>'avg_val()',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 00:42:59',
            'updated_at'=>'2023-03-20 00:42:59'
            ] );
            
            
                        
            Question::create( [
            'id'=>52,
            'subject_id'=>4,
            'question'=>'Bootstrap directory in Laravel is used to',
            'option_a'=>'Initialize a Laraval application',
            'option_b'=>'Call laravel library functions',
            'option_c'=>'Load the configuration files',
            'option_d'=>'Load laravel classes and models',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 00:43:48',
            'updated_at'=>'2023-03-20 00:43:48'
            ] );
            
            
                        
            Question::create( [
            'id'=>53,
            'subject_id'=>4,
            'question'=>'Which artisan command is used to remove the compiled class file.',
            'option_a'=>'clear-compiled',
            'option_b'=>'clear-compiled',
            'option_c'=>'compiled:clear',
            'option_d'=>'clear:all',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 00:44:33',
            'updated_at'=>'2023-03-20 00:44:33'
            ] );
            
            
                        
            Question::create( [
            'id'=>54,
            'subject_id'=>4,
            'question'=>'Which method breaks the collection into multiple, smaller collections of a given size',
            'option_a'=>'split()',
            'option_b'=>'chunk()',
            'option_c'=>'explode()',
            'option_d'=>'break()',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 00:45:18',
            'updated_at'=>'2023-03-20 00:45:18'
            ] );
            
            
                        
            Question::create( [
            'id'=>55,
            'subject_id'=>4,
            'question'=>'Artisan command to flush the application cache:',
            'option_a'=>'cache:flush',
            'option_b'=>'cache:clear',
            'option_c'=>'cache:forget',
            'option_d'=>'cache:remove',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 00:45:56',
            'updated_at'=>'2023-03-20 00:45:56'
            ] );
            
            
                        
            Question::create( [
            'id'=>56,
            'subject_id'=>4,
            'question'=>'The vendor directory contains',
            'option_a'=>'Laravel Framework code',
            'option_b'=>'Assets',
            'option_c'=>'Third-party code',
            'option_d'=>'Configuration files',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-20 00:46:31',
            'updated_at'=>'2023-03-20 00:46:31'
            ] );
            
            
                        
            Question::create( [
            'id'=>57,
            'subject_id'=>4,
            'question'=>'Where is the routing file located in Laravel ?',
            'option_a'=>'app/Http/',
            'option_b'=>'routes/',
            'option_c'=>'urls/',
            'option_d'=>'vendors/',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 01:36:30',
            'updated_at'=>'2023-03-20 01:36:30'
            ] );
            
            
                        
            Question::create( [
            'id'=>58,
            'subject_id'=>4,
            'question'=>'View files in Laravel end in',
            'option_a'=>'.blade.php',
            'option_b'=>'.php',
            'option_c'=>'.vue',
            'option_d'=>'.blade',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 01:37:29',
            'updated_at'=>'2023-03-20 01:37:29'
            ] );
            
            
                        
            Question::create( [
            'id'=>59,
            'subject_id'=>4,
            'question'=>'Which of following command is used to create a symbolic link from \"public/storage\" directory to \"storage/app/public\".',
            'option_a'=>'storage:link',
            'option_b'=>'link:public',
            'option_c'=>'link:storage',
            'option_d'=>'storage:link public/storage',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 01:38:31',
            'updated_at'=>'2023-03-20 01:38:31'
            ] );
            
            
                        
            Question::create( [
            'id'=>60,
            'subject_id'=>4,
            'question'=>'Which of following methods are used in database migrations classes?',
            'option_a'=>'execute() and rollback()',
            'option_b'=>'up() and down()',
            'option_c'=>'run() and delete()',
            'option_d'=>'save() and update()',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 01:39:21',
            'updated_at'=>'2023-03-20 01:39:21'
            ] );
            
            
                        
            Question::create( [
            'id'=>61,
            'subject_id'=>4,
            'question'=>'For what do the .env is used?',
            'option_a'=>'For setting environment variables',
            'option_b'=>'For running cron jobs',
            'option_c'=>'For tracking vendors',
            'option_d'=>'None of These',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 01:40:10',
            'updated_at'=>'2023-03-20 01:40:10'
            ] );
            
            
                        
            Question::create( [
            'id'=>62,
            'subject_id'=>4,
            'question'=>'Which directory contain “robot.txt” file ?',
            'option_a'=>'app',
            'option_b'=>'public',
            'option_c'=>'config',
            'option_d'=>'storage',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 01:41:00',
            'updated_at'=>'2023-03-20 01:41:00'
            ] );
            
            
                        
            Question::create( [
            'id'=>63,
            'subject_id'=>4,
            'question'=>'Interpolation of variable in laravel done using',
            'option_a'=>'compact',
            'option_b'=>'{{}}',
            'option_c'=>'helpers',
            'option_d'=>'output',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 01:43:58',
            'updated_at'=>'2023-03-20 01:43:58'
            ] );
            
            
                        
            Question::create( [
            'id'=>64,
            'subject_id'=>4,
            'question'=>'What is the HTTP Status Code for your website. When it is down for maintenance.',
            'option_a'=>'501',
            'option_b'=>'200',
            'option_c'=>'400',
            'option_d'=>'503',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-20 01:44:45',
            'updated_at'=>'2023-03-20 01:44:45'
            ] );
            
            
                        
            Question::create( [
            'id'=>65,
            'subject_id'=>4,
            'question'=>'__() in laravel used for',
            'option_a'=>'Printing value',
            'option_b'=>'For string translation',
            'option_c'=>'None of these',
            'option_d'=>'compact',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 01:48:39',
            'updated_at'=>'2023-03-20 01:48:39'
            ] );
            
            
                        
            Question::create( [
            'id'=>66,
            'subject_id'=>4,
            'question'=>'Where do we need to set database connection in Laravel?',
            'option_a'=>'config.php',
            'option_b'=>'setting.php',
            'option_c'=>'In seed files',
            'option_d'=>'.ENV file',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-20 01:49:20',
            'updated_at'=>'2023-03-20 01:49:20'
            ] );
            
            
                        
            Question::create( [
            'id'=>67,
            'subject_id'=>4,
            'question'=>'What is the minimum PHP version required to install Laravel 5.3?',
            'option_a'=>'7.1',
            'option_b'=>'5.6.4',
            'option_c'=>'5.3.2',
            'option_d'=>'5.4.3',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 01:50:12',
            'updated_at'=>'2023-03-20 01:50:12'
            ] );
            
            
                        
            Question::create( [
            'id'=>68,
            'subject_id'=>4,
            'question'=>'How to set a session data in Laravel?',
            'option_a'=>'$request->db->session(\'key\', \'value\');',
            'option_b'=>'$request->session()->set(\'key\', \'value\');',
            'option_c'=>'$request->session()->put(\'key\', \'value\');',
            'option_d'=>'None of These',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-20 01:52:04',
            'updated_at'=>'2023-03-20 01:52:04'
            ] );
            
            
                        
            Question::create( [
            'id'=>69,
            'subject_id'=>4,
            'question'=>'Who developed Laravel?',
            'option_a'=>'Rasmus Lerdorf',
            'option_b'=>'Taylor Otwell',
            'option_c'=>'James Gosling',
            'option_d'=>'Guido van Rossum',
            'answer'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 01:53:09',
            'updated_at'=>'2023-03-20 01:53:09'
            ] );
            
            
                        
            Question::create( [
            'id'=>70,
            'subject_id'=>4,
            'question'=>'How to create a controller in laravel by cmd?',
            'option_a'=>'php artisan make: generate controller contoller_name',
            'option_b'=>'php artisan make:controller generate',
            'option_c'=>'php artisan make:controller --plain',
            'option_d'=>'php artisan make:request controller_name create',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-20 01:54:03',
            'updated_at'=>'2023-03-20 01:54:03'
            ] );
            
            
                        
            Question::create( [
            'id'=>71,
            'subject_id'=>4,
            'question'=>'What is the purpose of the app/Providers directory in a Laravel project?',
            'option_a'=>'It stores views for the application',
            'option_b'=>'It stores controllers for the application',
            'option_c'=>'It stores routes for the application',
            'option_d'=>'It stores classes that provide various services to the rest of the application',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-20 01:55:14',
            'updated_at'=>'2023-03-20 01:55:14'
            ] );
            
            
                        
            Question::create( [
            'id'=>72,
            'subject_id'=>4,
            'question'=>'What is the purpose of the .env file in a Laravel project?',
            'option_a'=>'It stores views for the application',
            'option_b'=>'It stores routes for the application',
            'option_c'=>'It stores environment-specific configuration for the application',
            'option_d'=>'None of the above',
            'answer'=>3,
            'status'=>0,
            'created_at'=>'2023-03-20 01:55:49',
            'updated_at'=>'2023-03-20 01:55:49'
            ] );
            
            
                        
            Question::create( [
            'id'=>73,
            'subject_id'=>4,
            'question'=>'Which of the following is NOT a Laravel service container?',
            'option_a'=>'$db',
            'option_b'=>'$app',
            'option_c'=>'$cache',
            'option_d'=>'$request',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-20 01:56:26',
            'updated_at'=>'2023-03-20 01:56:26'
            ] );
            
            
                        
            Question::create( [
            'id'=>74,
            'subject_id'=>4,
            'question'=>'How can you define a new route in a Laravel application?',
            'option_a'=>'By adding a new route to the routes/web.php file',
            'option_b'=>'By adding a new route to the app/Routes/web.php file',
            'option_c'=>'By adding a new route to the app/Routes/web.php file',
            'option_d'=>'By adding a new route to the app/Http/Controllers/Route.php file',
            'answer'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 01:57:44',
            'updated_at'=>'2023-03-20 01:57:44'
            ] );
            
            
                        
            Question::create( [
            'id'=>75,
            'subject_id'=>4,
            'question'=>'How can you display a view in a Laravel application?',
            'option_a'=>'By using the view() helper function',
            'option_b'=>'By using the render() method of the View class',
            'option_c'=>'By using the display() method of the View class',
            'option_d'=>'Both A and B options are right',
            'answer'=>4,
            'status'=>0,
            'created_at'=>'2023-03-20 01:58:37',
            'updated_at'=>'2023-03-20 01:58:37'
            ] );
            
            
    }
}
