<?php 

namespace Xilnex;

class XilnexOutlet extends Library {

    public function __construct($registry) {
        parent::__construct($registry);

        $this->xilnex_model = new XilnexModel($registry);

        $this->xilnex_loader = new XilnexLoader($registry);

        $this->xilnex = $this->xilnex_loader->loadXilnex();
    }

    public function syncOutlet() {
        $results = $this->xilnex->getAllCompanyInfo();

        if (isset($results['data']['companyInfoList'])) {
            $results = $results['data']['companyInfoList'];

            foreach ($results as $result) {
                $outlet = $this->xilnex_model->getOutlet($result['locationId']);

                if (count($outlet) == 0) {
                    $this->xilnex_model->addOutlet($result);
                }
            }
        }
    }
}